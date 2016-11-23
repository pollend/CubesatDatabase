import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import {  ReactiveFormsModule }   from '@angular/forms';

import {ComponentRoutingModule} from './component-routing.module';


@NgModule({
  imports:      [
  	CommonModule,
	  ComponentRoutingModule,
	  ReactiveFormsModule
  ],
  declarations: [  ],
  providers:    [  ]
})
export class ComponentModule { }
