import * as coreui from '@coreui/coreui';
import axios from 'axios';

window.coreui = coreui
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
