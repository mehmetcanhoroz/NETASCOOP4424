import axios from 'axios';
import React from 'react';

import appConfig from '../Constants/Env';
import Swal from 'sweetalert2';
import withReactContent from 'sweetalert2-react-content';

const api = axios.create({
  baseURL: appConfig.serverCredentials.port
    ? `${appConfig.serverCredentials.host}:${appConfig.serverCredentials.port}/api`
    : `${appConfig.serverCredentials.host}/api`,
  headers: {
    Accept: 'application/json',
  },
});

api.interceptors.request.use((config) => {
  withReactContent(Swal).fire({
    allowOutsideClick: false,
    title: <span>Loading...</span>,
    onOpen: () => {
      withReactContent(Swal).showLoading();
    }
  });

  return config;
});

api.interceptors.response.use((response) => {
  withReactContent(Swal).closeModal();

  if (response.data.message)
    withReactContent(Swal).fire({
      icon: 'info',
      title: 'Hey!',
      html: response.data.message,
    });

  return response;
}, function (error) {
  withReactContent(Swal).fire({
    icon: 'error',
    title: 'Oops...',
    html: 'An error occoured!<br> <b>Details:</b> ' + error.response.data.message,
  });
  return Promise.reject(error);
});

export default api;
