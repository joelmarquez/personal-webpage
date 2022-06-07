<?php
                            // Api Youtube
                            $api_key="AIzaSyBqgVlVpwi1yYUw0CXiO8VVHHpy2aURm24"; // Ingresar tu Api Key
                            $channel_id="UC8ezcxZ4sM_8qAD8_PyJ18w"; // El Id del canal
                            $max_results="3"; // Resultados a mostrar
                            // var_dump(http_response_code()); die;
                            // LLamar a la API para obtener la lista de videos en JSON
                            $query = "https://www.googleapis.com/youtube/v3/search?key=$api_key&channelId=$channel_id&part=snippet,id&order=date&maxResults=".$max_results;
                            $videoList = file_get_contents($query);

                            if($query  == true)  {

                                // Convertir el JSON a Array
                                $results = json_decode($videoList, true);

                                foreach ($results['items'] as $items)
                                {
                                    $id = $items['id']['videoId']; //  Id del video
                                    $title= $items['snippet']['title']; // Titulo del video
                                    $description = $items['snippet']['description']; // Descripcion del video
                                    $published_at = $items['snippet']['publishedAt']; // Fecha de publicacion
                                    $channel_title = $items['snippet']['channelTitle']; // Titulo del canal
                                    $thumbnail = $items['snippet']['thumbnails']['medium']['url']; // Imagen miniatura, 3 valores: default, medium, high

                                    $date=date_create("$published_at");
                                    date_format($date,"d/m/Y");
                                    $publish = date_format($date,"d/m/Y");
                                    
                                    // Grid para mostrar los videos desde API Youtube

                                    echo "<div class='col-sm-4 wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='400ms'>";
                                    echo "<div class='post-thumb'>";
                                    echo "<div class='post-icon'><i class='fa fa-video-camera'></i></div>";
                                    echo "</div>";


                                    echo "<div class='thumbnail-hover'><a href='https://youtube.com/watch?v=$id\' target='_blank'><img src='$thumbnail'></a></div>";
                                    echo "<h3><b> $title </b></h3>";
                                    echo "<span><i class='fa fa-calendar-o'></i> Publicado el  $publish </span>";
                                    echo "<div class='entry-content'><p> $description </p></div>";

                                    echo "</div>";
                                }

                            } else {
                                echo "<div class='col-sm-12 text-center'><a href='https://www.youtube.com/joelmarquez' target='_blank'><img src='images/logo_canal_youtube.png' alt='Canal Youtube de Joel Márquez'></a></div>";
                            }
                             
                        ?>  