import api from '../../Utils/Api';

export const allMovies = () =>
  new Promise((resolve, reject) => {
    api
      .put(`/movies`)
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