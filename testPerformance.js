import http from 'k6/http';
import { sleep } from 'k6';
export const options = {
  vus: 10,
  duration: '30s',
};
export default function () {
  http.get('http://127.0.0.1:8000/user/susdata/index');
  sleep(1);
}
