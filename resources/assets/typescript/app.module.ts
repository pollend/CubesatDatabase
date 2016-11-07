import { NgModule }       from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';

/* App Root */
import { AppComponent }   from './app.component';

/* Feature Modules */
import {HomeComponent} from './home.component';
import {LoginComponent} from './login.component';
import {RegisterComponent} from './register.component';


/* Routing Module */
import { AppRoutingModule } from './app-routing.module';

@NgModule({
  imports: [
  		AppRoutingModule,
  		BrowserModule
  ],
  declarations: [ AppComponent, HomeComponent, RegisterComponent,LoginComponent],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }
