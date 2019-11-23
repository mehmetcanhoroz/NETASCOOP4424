import axios from 'axios';

import appConfig from '../constants/Env';

const api = axios.create({
    baseURL: appConfig.serverCredentials.port
      ? `${appConfig.serverCredentials.host}:${appConfig.serverCredentials.port}/api`
      : `${appConfig.serverCredentials.host}/api`,
    headers: {
      Accept: 'application/json',
    },
  });
  
  api.interceptors.response.use(undefined, err => {
  
    if (!err.response) {
      // network error
      /*SwalAlert(
        'Error',
        'We were not able to complete this process. Please wait a moment and then try again. Quote reference number 1360 when contacting our team to help resolve this issue.',
        'error',
      );*/
    }
    return Promise.reject(err);
  });
  
  export default api;
  