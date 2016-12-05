import { NgModule }             from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import {HomeComponent} from './home.component';
import {LoginComponent} from './login.component';
import {RegisterComponent} from './register.component';



export const routes: Routes = [
  { path: '', redirectTo: '/home', pathMatch: 'full'},
  { path: 'home', component: HomeComponent},
  { path: 'login', component: LoginComponent},
  { path: 'register', component: RegisterComponent},
  { path: 'account' , loadChildren: 'typescript/account/account.module#UserModule' },
  { path: 'satellite' , loadChildren: 'typescript/satellite/satellite.module#SatelliteModule' },
  { path: 'mission' , loadChildren: 'typescript/mission/mission.module#MissionModule' },
  { path: 'vendor' , loadChildren: 'typescript/vendor/vendor.module#VendorModule' },
  { path: 'component' , loadChildren: 'typescript/component/component.module#ComponentModule' },
  { path: 'profile', loadChildren: 'typescript/profile/profile.module#ProfileModule'}
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule {}

