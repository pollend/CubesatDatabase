// <reference path="../../../node_modules/angular2/typings/browser.d.ts" />  // no longer contains all of es6 type definitions
// <reference path="../../../node_modules/typescript/lib/lib.es6.d.ts" />
/// <reference path="../../../node_modules/angular2/typings/browser.d.ts"/>

import {AppComponent} from './app.component';
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';

platformBrowserDynamic().bootstrapModule(AppComponent);
