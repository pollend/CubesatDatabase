import { NgModule }       from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';
import { FormsModule , ReactiveFormsModule }   from '@angular/forms';
import { HttpModule } from '@angular/http';

/* App Root */
import { AppComponent }   from './app.component';

/* Feature Modules */
import {HomeComponent} from './home.component';
import {LoginComponent} from './login.component';
import {RegisterComponent} from './register.component';
import {ErrorCollectionComponent} from './share/error-collection.component';

/* Routing Module */
import { AppRoutingModule } from './app-routing.module';

import {UserService} from "./services/user-service";


@NgModule({
  imports: [
      HttpModule,
  		AppRoutingModule,
  		BrowserModule,
  		ReactiveFormsModule
  ],
  declarations: [ 
  	AppComponent, 
  	HomeComponent, 
  	RegisterComponent,
  	LoginComponent,
    ErrorCollectionComponent
  ],
  providers: [UserService],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }
