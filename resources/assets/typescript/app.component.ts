import {Component} from 'angular2/core';
import {HomeComponent} from './home.component';
import {AboutComponent} from './about.component';
import {SampleComponent} from './sample.component';

import {CubesatListComponent} from "./cubesat/cubesat_list.component";
import {MissionListComponent} from "./mission/mission_list.component";
import {PartListComponent} from "./part/part_list.component";
import {VendorListComponent} from "./vendor/vendor_list.component";

import { RouteConfig, ROUTER_DIRECTIVES, ROUTER_PROVIDERS } from 'angular2/router';


@Component({
    selector: 'my-app',
    template: ` 
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="nav-link"><a [routerLink]="['Home']">Home</a></li>
            <li class="nav-link"><a [routerLink]="['CubesatList']">Cubesats</a></li>
            <li class="nav-link"><a [routerLink]="['MissionList']">Missions</a></li>
            <li class="nav-link"><a [routerLink]="['VendorList']">Vendors</a></li>
            <li class="nav-link"><a [routerLink]="['PartList']">Components</a></li>
          </ul>
         </div>
       </div>
   </nav>

    <div class="main-container">
      <router-outlet></router-outlet>
    </div>
    `,
    directives: [ROUTER_DIRECTIVES],
    providers: [ROUTER_PROVIDERS]
})

@RouteConfig([
    { path: '/home', name: 'Home', component: HomeComponent, useAsDefault: true },
  { path: '/sample', name: 'Sample', component: SampleComponent },
  { path: '/cubesat', name: 'CubesatList', component: CubesatListComponent },
  { path: '/mission', name: 'MissionList', component: MissionListComponent },
  { path: '/component', name: 'PartList', component: PartListComponent },
  { path: '/vendor', name: 'VendorList', component: VendorListComponent }
])
export class AppComponent { }

