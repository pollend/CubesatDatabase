/// <reference path="./../../../typings/index.d.ts" />
/// <reference path="./../../../typings/tsd.d.ts" />
import {AppComponent} from './app.component';
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import {UserService} from "./services/user-service";

platformBrowserDynamic().bootstrapModule(AppComponent,[UserService]);
