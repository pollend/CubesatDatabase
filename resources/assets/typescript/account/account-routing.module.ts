import { NgModule }            from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


/* App Root */
import { AccountSettingsComponent }   from './account-settings.component';
import { AccountComponent } from './account.component';
import {AccountProfileComponent} from './account-profile.component';


export const routes: Routes = [
	{path:'',component:AccountComponent,
		children: [
			{path: '', component: AccountSettingsComponent},
			// {path: '/organization', component: AccountSettingsComponent},
			{path: 'profile', component: AccountProfileComponent}
		]
	}

];


@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AccountRoutingModule {}

