import http from 'k6/http';
export const options = {
  scenarios: {
    per_vu_scenario: {
      executor: "per-vu-iterations",
      vus: 1,
      iterations: 1,
    },
  },
};

// export const options = {
//   discardResponseBodies: true,
//   scenarios: {
//     contacts: {
//       executor: 'constant-vus',
//       vus: 1,
//       duration: '2m',
//     },
//   },
// };

export default function () {
      http.get('http://127.0.0.1:8000/user/susdata/index');
   }
