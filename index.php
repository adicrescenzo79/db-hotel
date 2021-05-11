<?php
  include_once __DIR__.'/partials/template/header.php';
?>


<table>
  <thead>
    <tr>
      <th>STANZE</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(stanza, i) in stanze">
      <td @click="roomSelect(stanza.id)" ><a href="#">{{stanza.room_number}}</a></td>
    </tr>
  </tbody>
</table>

<div v-if="room" class="stanza">
  La stanza {{room.room_number}} si trova al piano {{room.floor}} ed ha {{room.beds}} posti letto.
</div>
























<?php
  include_once __DIR__.'/partials/template/footer.php';
?>
