import {Component} from 'angular2/core';
import {HomeComponent} from './home.component';
import { RouteConfig, ROUTER_DIRECTIVES, ROUTER_PROVIDERS } from 'angular2/router';

@Component({
    selector: 'my-app',
    template: `
    <h1>Title</h1>
    <nav>
    	<a [routerLink]="['Home']">Home</a>
    </nav>
    <router-outlet></router-outlet>
    `,
    directives: [ROUTER_DIRECTIVES],
    providers: [
    ROUTER_PROVIDERS]
})

@RouteConfig([
  {path:'/home', name: 'Home', component: HomeComponent}
])
export class AppComponent { }

