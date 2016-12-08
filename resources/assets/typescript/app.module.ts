import { NgModule }       from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';
import {  ReactiveFormsModule }   from '@angular/forms';
import { HttpModule } from '@angular/http';

/* App Root */
import { AppComponent }   from './app.component';

/* Feature Modules */
import {HomeComponent} from './home.component';
import {LoginComponent} from './login.component';
import {RegisterComponent} from './register.component';

import { ShareModule } from './share/share.module';

/* Routing Module */
import { AppRoutingModule } from './app-routing.module';

import {UserService} from "./services/user-service";

@NgModule({
  imports: [
      HttpModule,
  		AppRoutingModule,
  		BrowserModule,
  		ReactiveFormsModule,
      ShareModule
  ],
  declarations: [ 
  	AppComponent, 
  	HomeComponent, 
  	RegisterComponent,
  	LoginComponent
  ],
  providers: [UserService],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }
