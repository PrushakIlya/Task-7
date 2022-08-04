export const apiStore = (url, payload) => {
  fetch(url, {
    method: 'POST',
    body: JSON.stringify(payload),
  })
    .then(res => res.json())
    .then(body => { 
      console.log(body);
      body && window.location.replace('/');
    })
    .catch(error => console.log(error));
};
