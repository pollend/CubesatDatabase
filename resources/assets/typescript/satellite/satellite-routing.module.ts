import { NgModule }            from '@angular/core';
import { RouterModule }        from '@angular/router';
import { SatelliteComponent } from "./satellite.component"
import { SatelliteListComponent } from "./satellite-list.component"



@NgModule({
  imports: [RouterModule.forChild([
	{path:'',component:SatelliteComponent,
		children: [
			{ path:'' , component: SatelliteListComponent }
			
		]
	}

  ])],
  exports: [RouterModule]
})
export class SatelliteRoutingModule {}

