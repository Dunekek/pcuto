-- список обслуженных пассажиров
SELECT * FROM `Tickets` 


--  список самолетов, использованных в определенный промежуток времени

select * from (SELECT DISTINCT id_plane  as plane FROM `Flights`
WHERE flight_date>'2022-06-01' and flight_date<'2022-08-01') flights
join Planes on plane=Planes.id_plane

--  количество пассажирова на определенном рейсе
SELECT count(passenger_name) as passengeers_count FROM `tICKETS` 
JOIN Flights ON Flights.id_flight=Tickets.id_flight
WHERE Tickets.id_flight=1


-- самолеты, использующиеся за последний месяц
 SELECT * FROM (SELECT  DISTINCT Planes.id_plane as plane FROM Planes
JOIN Flights on Planes.id_plane=Flights.id_plane
WHERE flight_date<DATE_ADD( CURRENT_DATE(), INTERVAL 1 MONTH)) A
JOIN Planes on Planes.id_plane=plane
