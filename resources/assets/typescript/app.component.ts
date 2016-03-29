import {Component} from 'angular2/core';
import {HomeComponent} from './home.component';
import {AboutComponent} from './about.component';
import {SampleComponent} from './sample.component';
import {RegisterComponent} from './register.component';
import {LoginComponent} from './login.component';

import {CubesatListComponent} from "./cubesat-list.component";
import {MissionListComponent} from "./mission-list.component";
import {PartListComponent} from "./part-list.component";
import {VendorListComponent} from "./vendor-list.component";

import { RouteConfig, ROUTER_DIRECTIVES, ROUTER_PROVIDERS } from 'angular2/router';

@Component({
    selector: 'my-app',
    templateUrl: 'templates/app.component.html',
    directives: [ROUTER_DIRECTIVES],
    providers: [ROUTER_PROVIDERS]
})

@RouteConfig([
  { path: '/home', name: 'Home', component: HomeComponent, useAsDefault: true },
  { path: '/sample', name: 'Sample', component: SampleComponent },
  { path: '/cubesat', name: 'CubesatList', component: CubesatListComponent },
  { path: '/mission', name: 'MissionList', component: MissionListComponent },
  { path: '/component', name: 'PartList', component: PartListComponent },
  { path: '/vendor', name: 'VendorList', component: VendorListComponent },
  { path: '/register', name:'Register', component: RegisterComponent},
  {path: '/login', name:'Login', component: LoginComponent}
])
export class AppComponent { }

