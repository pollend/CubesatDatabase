import { NgModule } from '@angular/core';


import { ShareModule } from "./../share/share.module";
import { CommonModule }   from '@angular/common';
import { ReactiveFormsModule }   from '@angular/forms';
import { ProfileRoutingModule } from './profile.routing.module';


import { ProfileComponent } from './profile.component';
import { ProfileUserComponent } from './profile-user.component';



@NgModule({
  imports:      [ 
    ShareModule,
    CommonModule,
    ReactiveFormsModule,
    ProfileRoutingModule
  ],
  declarations: [ 
  	ProfileComponent,
    ProfileUserComponent
  ],
  providers:    [  ]
})
export class ProfileModule { }
