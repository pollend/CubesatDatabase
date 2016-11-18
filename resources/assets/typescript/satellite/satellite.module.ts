//Modules
import { NgModule }       from '@angular/core';
import {SatelliteRoutingModule} from "./satellite-routing.module";
import { CommonModule }   from '@angular/common';
// components
import {SatelliteComponent} from "./satellite.component"
import { SatelliteListComponent } from "./satellite-list.component"

import {PaginationComponent} from "./../share/pagination.component";
import {SatelliteService} from "./../services/satellite-service";

import {  ReactiveFormsModule }   from '@angular/forms';

@NgModule({
  imports:      [ 
   CommonModule,
  SatelliteRoutingModule,
  ReactiveFormsModule
  
  ],
  declarations: [ 
    SatelliteListComponent,
    SatelliteComponent,
    PaginationComponent
  ],
  providers:    [SatelliteService ]
})
export class SatelliteModule { }
