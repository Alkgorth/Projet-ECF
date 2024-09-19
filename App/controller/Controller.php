<?php


namespace App\Controller;

class Controller
{
    public function route(): void
    {
        try {
            if (isset($_GET['controller'])) {
                switch ($_GET['controller']) {
                    case 'value':
                        # code...
                        break;
                    case 'value':
                        # code...
                        break;
                    case 'value':
                        # code...
                        break;
                    case 'value':
                        # code...
                        break;

                    default:
                        # code...
                        break;
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
