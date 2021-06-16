<template>
<div class="main-about-us pa-4 text-center">
  <p class="main-about-us__text-biggest">O NAS</p>
  <br>
  <p class="main-about-us__text-big">Działamy na rynku od 1997r.</p>
  <br>
  <p>
    Specjalizujemy się w sprzedaży i serwisie maszyn do produkcji rolnej.
    Posiadamy pełną ofertę maszyn firm: <strong>STEYER, CASE IH, STRAUTMANN, MANITOU, MASCHIO GASPARDO, LEMKEN, ITALMIX, ANNABURGER</strong> i wielu innych.
    Oferujemy maszyny nowe jak i używane z obsługą finansowania i z możliwością skorzystania z pakietu ubezpieczeń.
    W sprzedaży posiadamy szeroką gamę części zamiennych oraz kompleksowy serwis podparty fachowym doradztwem techniczym.
    Dodatkowo świadczymy usługi rolnicze z możliwością wynajmu maszyn.
    Zdajemy sobie sprawę z tego, jak cenny jest dziś czas, dlatego naszym klientom oferujemy wszystkie niezbędne usługi w jednym miejscu.
    Nasza działalność obejmuje głównie teren centralnej i północno - wschodniej Polski. Siedziba główna naszej firmy znajduje się w Zambrowie (woj. podlaskie).
    Nasze oddziały zlokalizowane są w: Przasnysz , Grójec, Stare Opole k. Siedlec i Białystok.
  </p>
  <p class="main-about-us__text-medium">
    Zapraszamy do współpracy!
  </p>
</div>
</template>

<script>
export default {
}
</script>

<style scoped>
.main-about-us{
  font-family: 'Brygada 1918', serif;
  margin: auto;
  width: 50%;
  display:grid;
  flex-direction: column;
  justify-items: center;
}
@media (max-width:960px){
  .main-about-us{
    width: 80%;
  }
}
.main-about-us__text-biggest{
  font-size: 2.5rem;
}
.main-about-us__text-big{
  font-size: 1.875rem;
}
.main-about-us__text-medium{
  font-size: 1.125rem;
  font-weight: 500;
}
</style>
