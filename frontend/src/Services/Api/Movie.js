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


  export default allMovies;