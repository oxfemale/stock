<?php
                        function curl_get_contents($url)
                        {
                          $ch = curl_init($url);
                          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                          $data = curl_exec($ch);
                          curl_close($ch);
                          return $data;
                        } 

                        if( isset( $_POST['dodo'] ) )
                        {
        
                         include 'includes/dodo.php';
                        }
                        if( isset( $_POST['pzw'] ) )
                        {
        
                         include 'includes/psw.php';
                        }
                        if( isset( $_POST['sushiwok'] ) )
                        {
        
                         include 'includes/sushiwok_full.php';
                        }
                        if( isset( $_POST['kfc-cop'] ) )
                        {
        
                         include 'includes/kfc-coupons.php';
                        }
                        if( isset( $_POST['kfc-act'] ) )
                        {
        
                         include 'includes/kfc-promo.php';
                        }
                        if( isset( $_POST['bk-cop'] ) )
                        {
        
                         include 'includes/bk-coupons.php';
                        }
                        if( isset( $_POST['bk-act'] ) )
                        {
        
                         include 'includes/bk-actions.php';
                        }
                ?>
                <form method="POST">
                <label for="dodo">DODO</label>
                <br>
                <input type="submit" id = 'dodo' name="dodo" value="Обновить" /> <br>

                <label for="pizzawok">PizzaSushiWok</label>
                <br>
                <input type="submit" id = 'pizzawok' name="pzw" value="Обновить" /> <br>
                
                <label for="sushiwok">SushiWok</label>
                <br>
                <input type="submit" id = 'sushiwok' name="sushiwok" value="Обновить" /> <br>
                
                <label for="kfc-cop">KFC COUPONS</label>
                <br>
                <input type="submit" id = 'kfc-cop' name="kfc-cop" value="Обновить" /> <br>
                
                <label for="kfc-act">KFC ACTIONS</label>
                <br>
                <input type="submit" id = 'kfc-act' name="kfc-act" value="Обновить" /> <br>
               
                <label for="bk-cop">BK COUPONS</label>
                <br>
                <input type="submit" id = 'bk-cop' name="bk-cop" value="Обновить" /> <br>
                
                <label for="bk-act">BK ACTIONS</label>
                <br>
                <input type="submit" id = 'bk-act' name="bk-act" value="Обновить" /> <br>
                
                <br>
                </form>
                