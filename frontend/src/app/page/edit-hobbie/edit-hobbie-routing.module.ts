import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { EditHobbiePage } from './edit-hobbie.page';

const routes: Routes = [
  {
    path: '',
    component: EditHobbiePage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EditHobbiePageRoutingModule {}
