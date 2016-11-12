import { NgModule } from '@angular/core';

import {UserRoutingModule} from "./user-routing.module";

/* App Root */
import { UserComponent }   from './user.component';

@NgModule({
  imports:      [ UserRoutingModule ],
  declarations: [ UserComponent ],
  providers:    [  ]
})
export class UserModule { }
