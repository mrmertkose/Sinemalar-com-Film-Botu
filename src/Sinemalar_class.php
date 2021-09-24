<?php

namespace Sinemalar;

use DiDom\Document;

class Sinemalar_class
{

    private $base_url = "https://www.sinemalar.com/film/";

    public function __construct($film_id = "639/schindlerin-listesi")
    {
        $this->document = new Document($this->base_url . $film_id, true);
    }

    public function get_filmAd()
    {
        return trim($this->document->first("h1[itemprop=name]")->text());
    }

    public function get_puan()
    {
        return $this->document->first("span[itemprop=ratingValue]")->text();
    }

    public function get_oy()
    {
        return $this->document->first("span[itemprop=ratingCount]")->text();
    }

    public function get_filmOrjAd()
    {
        $sonuc = "Veri Yok";
        foreach ($this->document->find("div[class=col] > div[class=info-group]") as $item) {
            foreach ($item->find("span[class=label-title]") as $item2) {
                if ($item2->text() == "Orijinal İsmi:") {
                    $sonuc = $item->first("span[class=label]")->text();
                }
            }
        }
        return $sonuc;
    }

    public function get_vizyon()
    {
        $sonuc = "Veri Yok";
        foreach ($this->document->find("div[class=col] > div[class=info-group]") as $item) {
            foreach ($item->find("span[class=label-title]") as $item2) {
                if ($item2->text() == "Vizyon Tarihi:") {
                    $sonuc = trim($item->first("span[class=label]")->text());
                }
            }
        }
        return $sonuc;
    }

    public function get_tur()
    {
        $sonuc = "Veri Yok";
        foreach ($this->document->find("div[class=col] > div[class=info-group]") as $item) {
            foreach ($item->find("span[class=label-title]") as $item2) {
                if ($item2->text() == "Tür:") {
                    $sonuc = trim($item->first("span[class=label]")->text());
                }
            }
        }
        return $sonuc;
    }

    public function get_sure()
    {
        $sonuc = "Veri Yok";
        foreach ($this->document->find("div[class=col] > div[class=info-group]") as $item) {
            foreach ($item->find("span[class=label-title]") as $item2) {
                if ($item2->text() == "Süre") {
                    $sonuc = trim($item->first("span[class=label]")->text());
                }
            }
        }
        return $sonuc;
    }

    public function get_yapimi()
    {
        $sonuc = "Veri Yok";
        foreach ($this->document->find("div[class=col] > div[class=info-group]") as $item) {
            foreach ($item->find("span[class=label-title]") as $item2) {
                if ($item2->text() == "Yapımı:") {
                    $sonuc = trim($item->first("span[class=label]")->text());
                }
            }
        }
        return $sonuc;
    }

    public function get_konu()
    {
        return trim($this->document->first("p[itemprop=description]")->text());
    }

    public function get_poster()
    {
        return $this->document->first("link[rel=image_src]")->attr("href");
    }

    public function get_video()
    {
        return $this->document->first("meta[name=twitter:player:stream]")->attr("content");
    }

    public function get_yonetmen()
    {
        $sonuc = "Veri Yok";
        foreach ($this->document->find("div[class=col] > div[class=info-group]") as $item) {
            foreach ($item->find("span[class=label-title]") as $item2) {
                if ($item2->text() == "Yönetmen:") {
                    $sonuc = trim($item->first("span[class=label]")->text());
                }
            }
        }
        return $sonuc;    
    }


}
