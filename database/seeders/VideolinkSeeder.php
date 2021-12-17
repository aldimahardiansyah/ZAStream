<?php

namespace Database\Seeders;

use App\Models\Videolink;
use Illuminate\Database\Seeder;

class VideolinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Videolink::create([
            'anime_id' => 1,
            'episode' => 1,
            'link' => 'https://r2---sn-poqvn5u-jb3k.googlevideo.com/videoplayback?expire=1639780452&ei=5J-8Yb7_EuKE2LYPv4SuoAw&ip=75.119.159.228&id=643fb389f0243418&itag=22&source=blogger&susc=bl&mime=video/mp4&vprv=1&dur=1427.214&lmt=1610305871526670&txp=1311224&sparams=expire,ei,ip,id,itag,source,susc,mime,vprv,dur,lmt&sig=AOq0QJ8wRAIgYnSd6jFKCIoy6fwOYWUkBQEYzl3Ld5sv-bi17PE2C7gCIC6d9rFnvAZp_-NqWuROsgX-b2GE9KjIHWWQNfXi3mJd&cms_redirect=yes&mh=Zn&mip=120.188.2.156&mm=31&mn=sn-poqvn5u-jb3k&ms=au&mt=1639751328&mv=m&mvi=2&pl=22&lsparams=mh,mip,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRQIgfsII1Cg3T-1V8lN7sw0vCoQ0_etaLMlQMmTeQjfQYR0CIQCPh260K_j8EElC3SzZbasBbs8Ixp8fK2hBpJn8xrWErA%3D%3D'
        ]);
    }
}
