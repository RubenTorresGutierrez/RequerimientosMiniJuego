-- Después de comprobar que existen más de 10 filas en la tabla partida
-- Sacar la fila con la puntuación más baja almacenada
SELECT
    idPartida, MIN(puntuacion)
FROM
    partida
;

-- Eliminar la partida con la puntuación más baja
DELETE
    *
FROM
    partida
WHERE
    idPartida = idPartida
;

-- Añadir la nueva partida
INSERT INTO partida(idJuego, nick, puntuacion, fechaHora)
VALUES(idJuego, nick, puntuacion, CURRENT_TIMESTAMP);

-- Consulta ALL IN ONE
UPDATE
    partida
SET
    nick = $nick, puntuacion = $puntuacion, fechaHora = CURRENT_TIMESTAMP
WHERE
    idPartida = (
        SELECT
            idPartida
        FROM
            partida
        HAVING
            MIN(puntuacion)
    )
    AND
    $puntuacion > (
        SELECT
            MIN(puntuacion)
        FROM
            partida
    )
;