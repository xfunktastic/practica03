import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { EditFrameworkPage } from './edit-framework.page';

const routes: Routes = [
  {
    path: '',
    component: EditFrameworkPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EditFrameworkPageRoutingModule {}
