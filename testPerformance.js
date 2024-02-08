import http from 'k6/http';
export const options = {
  scenarios: {
    per_vu_scenario: {
      executor: "per-vu-iterations",
      vus: 10,
      iterations: 100,
    },
  },
};

// export const options = {
//   discardResponseBodies: true,
//   scenarios: {
//     contacts: {
//       executor: 'constant-vus',
//       vus: 1,
//       duration: '5m',
//     },
//   },
// };

export default function () {
      http.get('http://127.0.0.1:8000/user/susdata/index');
   }
