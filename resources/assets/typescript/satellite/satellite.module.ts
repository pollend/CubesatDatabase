import { NgModule }           from '@angular/core';

import {SatelliteComponent} from "./satellite.component"
import {SatelliteRoutingModule} from "./satellite-routing.module";

@NgModule({
  imports:      [ SatelliteRoutingModule ],
  declarations: [ SatelliteComponent ],
  providers:    [  ]
})
export class SatelliteModule { }
