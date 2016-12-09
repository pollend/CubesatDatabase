import { NgModule }            from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import {ComponentComponent} from './component.component';
import {ComponentListComponent} from './component-list.component';
import { ComponentGroupSearchComponent } from './component-group-search.component';

export const routes: Routes = [
	{path:'',component:ComponentComponent,
		children: [
			{ path:'' , component: ComponentListComponent },
			{ path:':component_group' , component: ComponentGroupSearchComponent }

		]
	}
];


@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ComponentRoutingModule {}

