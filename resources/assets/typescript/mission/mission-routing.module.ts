import { NgModule }            from '@angular/core';
import { RouterModule }        from '@angular/router';

import {MissionListComponent} from "./mission-list.component";
import {MissionComponent} from './mission.component';

@NgModule({
  imports: [RouterModule.forChild([
	{path:'',component:MissionComponent,
		children: [
			{ path:'' , component: MissionListComponent }
			
		]
	}
  ])],
  exports: [RouterModule]
})
export class MissionRoutingModule {}

