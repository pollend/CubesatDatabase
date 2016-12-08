import { NgModule } from '@angular/core';

import {AccountRoutingModule} from "./account-routing.module";
import {ShareModule} from "./../share/share.module";
import { CommonModule }   from '@angular/common';
import { ReactiveFormsModule }   from '@angular/forms';


/* App Root */
import { AccountSettingsComponent }   from './account-settings.component';
import { AccountComponent } from './account.component';
import {AccountProfileComponent} from './account-profile.component';

import { UserService } from './../services/user-service';
import { ProfileService } from './../services/profile-service';


import { FileSelectDirective , FileDropDirective } from 'ng2-file-upload';

@NgModule({
  imports:      [ 
  	AccountRoutingModule,
  	ShareModule,
  	CommonModule,
	  ReactiveFormsModule
  ],
  declarations: [ 
  	AccountSettingsComponent,
  	AccountComponent,
    AccountProfileComponent,
    FileSelectDirective , 
    FileDropDirective
  ],
  providers:    [
    UserService,
    ProfileService
  ]
})
export class UserModule { }
