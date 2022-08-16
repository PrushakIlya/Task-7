// const apiPersist = payload => {
//   fetch('http://localhost:8888/user', {
//     method: 'POST',
//     cors: 'no-cors',
//     body: JSON.stringify(payload),
//   })
//     .then(resp => resp.json())
//     .then(resp => console.log(resp))
//     .catch(error => console.log(error));
// };

const apiGet = (url, dispatch, action) => {
  fetch(url)
    .then(resp => resp.json())
    .then(resp => {
      dispatch(action(resp));
    })
    .catch(error => console.log(error));
};

export { apiGet };
