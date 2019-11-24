import api from '../../Utils/Api';

export const allMovies = () =>
  new Promise((resolve, reject) => {
    api
      .get(`/movies`)
      .then(res => {
        if (res.error) {
          reject(res);
        } else {
          resolve(res);
        }
      })
      .catch(error => reject(error));
  });

export const getMovie = (reqData) =>
  new Promise((resolve, reject) => {
    api
      .get(`/movies/` + reqData.id)
      .then(res => {
        if (res.error) {
          reject(res);
        } else {
          resolve(res);
        }
      })
      .catch(error => reject(error));
  });

export const makeComment = (reqData) =>
  new Promise((resolve, reject) => {
    api
      .post(`/movies/` + reqData.id + "/comment", { ...reqData })
      .then(res => {
        if (res.error) {
          reject(res);
        } else {
          resolve(res);
        }
      })
      .catch(error => reject(error));
  });

export const likeMovie = (reqData) =>
  new Promise((resolve, reject) => {
    api
      .post(`/movies/` + reqData.id + "/like", {...reqData})
      .then(res => {
        if (res.error) {
          reject(res);
        } else {
          resolve(res);
        }
      })
      .catch(error => reject(error));
  });


export default allMovies;