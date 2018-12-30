<div class="container">
    <h1>Přihlášení a registrace</h1>

    <p>Projekt pro přihlášení a registraci. K přihlášení a registraci je využívána knihovna Ion auth. Registrace je udělána ve více úrovních zpracování.</p>

    <p><b>Přihlášení</b> - kontroluje správnost přihlašovacího jména a hesla. V případě chyby je uživatel přesměrován zpět na přihlašovací stránku s odpovídající chybovou hláškou.</p>

    <h2>Registrace</h2>
    <p><b>Registrace level 1</b> - kontroluje pouze shodu hesel, v tomto případě uživatele zaregistruje, jinak vrátí na registrační stránku s chybovou hláškou.</p>
    <p><b>Registrace level 2</b> - kontroluje pomocí Form Validation library správnost jednotlivých údajů. V případě chyby vrátí odpovídající chybové hlášky.</p>
    <p><b>Registrace level 3</b> - kontroluje správnost údajů, u špatných necitlivých údajů je zobrazí zpátky a zabarví odpovídající pole červeně nebo zeleně.</p>
    
    <h2>Dashboard</h2>
    <p>V ukázce je vytvořeno několik vzorových controllerů pro administraci. Rovněž je předvedena práce s více layouty v rámci jednoho projektu (zvláštní layout pro frontend a backend - v backendu zobrazení uživatelského jména přihlášeného uživatele v navbaru</p>
</div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

