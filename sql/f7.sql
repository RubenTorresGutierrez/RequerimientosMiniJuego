-- Mostrar las 10 mejores puntuaciones
SELECT
    nombre, nick, puntuacion
FROM
    partida p
INNER JOIN
    juego j ON p.idJuego = j.idJuego
ORDER BY
    puntuacion DESC
;