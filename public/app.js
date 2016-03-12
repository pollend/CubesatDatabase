System.register(['angular2/core'], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
        var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
        if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
        else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
        return c > 3 && r && Object.defineProperty(target, key, r), r;
    };
    var __metadata = (this && this.__metadata) || function (k, v) {
        if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
    };
    var core_1;
    var AboutComponent;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            }],
        execute: function() {
            AboutComponent = (function () {
                function AboutComponent() {
                }
                AboutComponent = __decorate([
                    core_1.Component({
                        selector: 'about',
                        template: "\n    <h1>About</h1>\n    "
                    }), 
                    __metadata('design:paramtypes', [])
                ], AboutComponent);
                return AboutComponent;
            }());
            exports_1("AboutComponent", AboutComponent);
        }
    }
});

System.register(['angular2/core'], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
        var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
        if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
        else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
        return c > 3 && r && Object.defineProperty(target, key, r), r;
    };
    var __metadata = (this && this.__metadata) || function (k, v) {
        if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
    };
    var core_1;
    var HomeComponent;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            }],
        execute: function() {
            HomeComponent = (function () {
                function HomeComponent() {
                }
                HomeComponent = __decorate([
                    core_1.Component({
                        selector: 'home',
                        template: "\n    <h1>HOME</h1>\n    "
                    }), 
                    __metadata('design:paramtypes', [])
                ], HomeComponent);
                return HomeComponent;
            }());
            exports_1("HomeComponent", HomeComponent);
        }
    }
});

System.register(['angular2/core', './home.component', './about.component', 'angular2/router'], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
        var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
        if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
        else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
        return c > 3 && r && Object.defineProperty(target, key, r), r;
    };
    var __metadata = (this && this.__metadata) || function (k, v) {
        if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
    };
    var core_1, home_component_1, about_component_1, router_1;
    var AppComponent;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            },
            function (home_component_1_1) {
                home_component_1 = home_component_1_1;
            },
            function (about_component_1_1) {
                about_component_1 = about_component_1_1;
            },
            function (router_1_1) {
                router_1 = router_1_1;
            }],
        execute: function() {
            AppComponent = (function () {
                function AppComponent() {
                }
                AppComponent = __decorate([
                    core_1.Component({
                        selector: 'my-app',
                        template: " \n    <header class=\"navigation\" role=\"banner\">\n      <div class=\"navigation-wrapper\">\n        <a href=\"javascript:void(0)\" class=\"logo\">\n          <img src=\"https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png\" alt=\"Logo Image\">\n        </a>\n        <a href=\"javascript:void(0)\" class=\"navigation-menu-button\" id=\"js-mobile-menu\">MENU</a>\n        <nav role=\"navigation\">\n          <ul id=\"js-navigation-menu\" class=\"navigation-menu show\">\n            <li class=\"nav-link\"><a [routerLink]=\"['Home']\">Home</a></li>\n            <li class=\"nav-link\"><a [routerLink]=\"['About']\">About</a></li>\n            \n            <li class=\"nav-link more\"><a href=\"javascript:void(0)\">More</a>\n              <ul class=\"submenu\">\n                <li><a href=\"javascript:void(0)\">Submenu Item</a></li>\n                <li><a href=\"javascript:void(0)\">Another Item</a></li>\n                <li class=\"more\"><a href=\"javascript:void(0)\">Item with submenu</a>\n                  <ul class=\"submenu\">\n                    <li><a href=\"javascript:void(0)\">Sub-submenu Item</a></li>\n                    <li><a href=\"javascript:void(0)\">Another Item</a></li>\n                  </ul>\n                </li>\n\n                <li class=\"more\"><a href=\"javascript:void(0)\">Another submenu</a>\n                  <ul class=\"submenu\">\n                    <li><a href=\"javascript:void(0)\">Sub-submenu</a></li>\n                    <li><a href=\"javascript:void(0)\">An Item</a></li>\n                  </ul>\n                </li>\n              </ul>\n            </li>\n          </ul>\n        </nav>\n        <div class=\"navigation-tools\">\n           <a href=\"javascript:void(0)\">Register</a>\n        </div>\n      </div>\n    </header>\n    <div class=\"main-container\">\n      <router-outlet></router-outlet>\n    </div>\n    ",
                        directives: [router_1.ROUTER_DIRECTIVES],
                        providers: [router_1.ROUTER_PROVIDERS]
                    }),
                    router_1.RouteConfig([
                        { path: '/home', name: 'Home', component: home_component_1.HomeComponent },
                        { path: '/about', name: 'About', component: about_component_1.AboutComponent }
                    ]), 
                    __metadata('design:paramtypes', [])
                ], AppComponent);
                return AppComponent;
            }());
            exports_1("AppComponent", AppComponent);
        }
    }
});

/// <reference path="./../../../node_modules/angular2/typings/browser.d.ts" />
System.register(['angular2/platform/browser', './app.component', 'angular2/router'], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var browser_1, app_component_1, router_1;
    return {
        setters:[
            function (browser_1_1) {
                browser_1 = browser_1_1;
            },
            function (app_component_1_1) {
                app_component_1 = app_component_1_1;
            },
            function (router_1_1) {
                router_1 = router_1_1;
            }],
        execute: function() {
            browser_1.bootstrap(app_component_1.AppComponent, [
                router_1.ROUTER_PROVIDERS
            ]);
        }
    }
});
