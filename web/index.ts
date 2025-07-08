import { morph } from '@alpinejs/morph';
import Alpine, { data } from 'alpinejs';
import { sse } from './sse';
import './index.css'
import viewer from './viewer';

window["Alpine"] = Alpine

Alpine.data('viewer', viewer);

Alpine.plugin(morph);
Alpine.plugin(sse);
Alpine.start()

