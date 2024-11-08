<?php

class Livre {

    private string $titre;
    private DateTime $dateParution;
    private int $pages;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, string $dateParution, int $pages, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->dateParution = new DateTime($dateParution);
        $this->pages = $pages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
    }


    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }


    public function getDateParution()
    {
        return $this->dateParution;
    }

    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }


    public function getPages()
    {
        return $this->pages;
    }

    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }


    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    
    public function getAuteur()
    {
        return $this->auteur;
    }
    
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        
        return $this;
    }

    public function __toString(){
        return $this->titre." (".$this->dateParution->format("Y").") : ".$this->pages." pages / ".$this->prix." €";
    }

    }


