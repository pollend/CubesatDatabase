import { NgModule }            from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ProfileComponent } from './profile.component';
import { ProfileUserComponent } from './profile-user.component';





export const routes: Routes = [
	{path:'',component:ProfileComponent, children: [
		{path:':user', component: ProfileUserComponent}

	]}
];


@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ProfileRoutingModule {}

