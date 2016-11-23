//Modules
import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import {  ReactiveFormsModule }   from '@angular/forms';

import {SatelliteRoutingModule} from "./satellite-routing.module";


// components
import {SatelliteComponent} from "./satellite.component"
import { SatelliteListComponent } from "./satellite-list.component"

import {SatelliteService} from "./../services/satellite-service";

import {ShareModule} from "./../share/share.module";



@NgModule({
  imports:      [ 
     ShareModule,
     CommonModule,
     SatelliteRoutingModule,
     ReactiveFormsModule,
  ],
  declarations: [ 
    SatelliteListComponent,
    SatelliteComponent
  ],
  providers:    [SatelliteService ]
})
export class SatelliteModule { }
