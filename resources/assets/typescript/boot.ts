/// <reference path="./../../../typings/index.d.ts" />
/// <reference path="./../../../typings/tsd.d.ts" />
import {AppComponent} from './app.component';
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';


// Statics
import 'rxjs/add/observable/throw';

// Operators
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/debounceTime';
import 'rxjs/add/operator/distinctUntilChanged';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/switchMap';
import 'rxjs/add/operator/toPromise';

platformBrowserDynamic().bootstrapModule(AppComponent);
