import {Component} from 'angular2/core';
import { RouteConfig, ROUTER_DIRECTIVES, ROUTER_PROVIDERS,AsyncRoute} from 'angular2/router';

declare var System:any;

@Component({
    selector: 'my-app',
    templateUrl: 'templates/app.component.html',
    directives: [ROUTER_DIRECTIVES],
    providers: [ROUTER_PROVIDERS]
})

@RouteConfig([
  new AsyncRoute(
    { 
      path: '/home',
      name: 'Home',
      loader: () => System.import('./typescript/home.component').then(m => m.HomeComponent), 
      useAsDefault: true 
    }),
  new AsyncRoute(
    { 
      path: '/sample',
      name: 'Sample',
      loader: () => System.import('./typescript/sample.component').then(m => m.SampleComponent) 
    }),
  new AsyncRoute(
    { 
      path: '/cubesat',
      name: 'CubesatList',
      loader: () => System.import('./typescript/cubesat-list.component').then(m => m.CubesatListComponent) 
    }),
  new AsyncRoute(
    { 
      path: '/mission',
      name: 'MissionList',
      loader: () => System.import('./typescript/mission-list.component').then(m => m.MissionListComponent)
    }),
  new AsyncRoute(
    { 
      path: '/component',
      name: 'ComponentList',
      loader: () => System.import('./typescript/component-list.component').then(m => m.ComponentListComponent)
    }),
  new AsyncRoute(
    { 
      path: '/vendor',
      name: 'VendorList',
      loader: () => System.import('./typescript/vendor-list.component').then(m => m.VendorListComponent)
    }),
  new AsyncRoute(
    { 
      path: '/register',
      name:'Register', 
      loader: () => System.import('./typescript/register.component').then(m => m.RegisterComponent)
    }),
  new AsyncRoute({
    path: '/about', 
    name:'About',  
    loader: () => System.import('./typescript/about.component').then(m => m.AboutComponent)
  }),
  new AsyncRoute({
    path: '/loing', 
    name:'Login',  
    loader: () => System.import('./typescript/login.component').then(m => m.LoginComponent)
  })])

export class AppComponent { }

