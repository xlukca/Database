import http from 'k6/http';

export const options = {
  discardResponseBodies: true,
  scenarios: {
    contacts: {
      executor: 'constant-vus',
      vus: 10,
      duration: '4m',
    },
  },
};

export default function () {
  // const randomPage = Math.floor(Math.random() * 100000) + 1;
  // const randomPage = Math.floor(Math.random() * 200000) + 1;
  // const randomPage = Math.floor(Math.random() * 300000) + 1;
  const randomPage = Math.floor(Math.random() * 400000) + 1;
  // const randomPage = Math.floor(Math.random() * 1000) + 1;
  const url = `http://127.0.0.1:8000/user/susdat/index?page=${randomPage}`;
  http.get(url);
   }

// AUTOMATIC CACHE
  // export default function () {
  //   for (let page = 1; page <= 1000; page++) {
  //     const url = `http://127.0.0.1:8000/user/susdat/index?page=${page}`;
  //     http.get(url);
  //   }
  // }
