import {Component} from 'angular2/core';
import {HomeComponent} from './home.component';
import {AboutComponent} from './about.component';
import {SampleComponent} from './sample.component'
import { RouteConfig, ROUTER_DIRECTIVES, ROUTER_PROVIDERS } from 'angular2/router';


@Component({
    selector: 'my-app',
    template: ` 
    <header class="navigation" role="banner">
      <div class="navigation-wrapper">
        <a href="javascript:void(0)" class="logo">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
        </a>
        <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
        <nav role="navigation">
          <ul id="js-navigation-menu" class="navigation-menu show">
            <li class="nav-link"><a [routerLink]="['Test']">Test</a></li>
            <li class="nav-link"><a [routerLink]="['Home']">Home</a></li>
            <li class="nav-link"><a [routerLink]="['About']">About</a></li>
            
            <li class="nav-link more"><a href="javascript:void(0)">More</a>
              <ul class="submenu">
                <li><a href="javascript:void(0)">Submenu Item</a></li>
                <li><a href="javascript:void(0)">Another Item</a></li>
                <li class="more"><a href="javascript:void(0)">Item with submenu</a>
                  <ul class="submenu">
                    <li><a href="javascript:void(0)">Sub-submenu Item</a></li>
                    <li><a href="javascript:void(0)">Another Item</a></li>
                  </ul>
                </li>
                
                <li class="more"><a href="javascript:void(0)">Another submenu</a>
                  <ul class="submenu">
                    <li><a href="javascript:void(0)">Sub-submenu</a></li>
                    <li><a href="javascript:void(0)">An Item</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="navigation-tools">
          <div class="search-bar">
            <form role="search">
              <input type="search" placeholder="Enter Search" />
              <button type="submit">
                <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/search-icon.png" alt="Search Icon">
              </button>
            </form>
          </div>
        </div>
      </div>
    </header>
    <div class="main-container">
      <router-outlet></router-outlet>
    </div>
    `,
    directives: [ROUTER_DIRECTIVES],
    providers: [ROUTER_PROVIDERS]
})

@RouteConfig([
  {path:'/home', name: 'Home', component: HomeComponent},
  {path:'/about', name: 'About', component: AboutComponent},
  { path: '/test', name: 'Test', component: SampleComponent }
])
export class AppComponent { }

