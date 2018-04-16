INSERT INTO
  roles (roleName)
VALUES
  ("développement"),
  ("design"),
  ("marketing");
INSERT INTO
  teachers (teacherFirstName, teacherLastName)
VALUES
  ("Frédéric", "NOEL"),
  ("Sitapha", "DIA");
INSERT INTO
  users (
    userMail,
    userPassword,
    userToken,
    userTokenTime,
    userFirstName,
    userLastName,
    userGender,
    userBirthdate,
    userHasAcceptedTerms,
    userHasConfirmedEmail,
    userCreationDate,
    userAdress,
    userAvatar,
    zipCode,
    userCity,
    userSpeciality,
    roleId
  )
VALUES
  (
    "george@gmail.com",
    "qscqs",
    "dvdv",
    "2018-01-01 00:00:01",
    "george",
    "toto",
    0,
    "2018-01-01",
    1,
    1,
    "2018-01-01 00:00:01",
    "10 rue de la mairie",
    "http://www.placeholder.com/300x300",
    76000,
    "rouen",
    1,
    1
  ),
  (
    "albert@gmail.com",
    "qscqs",
    "dvdv",
    "2018-01-02 00:00:01",
    "albert",
    "tata",
    0,
    "2018-01-02",
    1,
    1,
    "2018-01-02 00:00:01",
    "12 rue de la mairie",
    "http://www.placeholder.com/300x300",
    76000,
    "rouen",
    2,
    2
  ),
  (
    "eugene@gmail.com",
    "qscqs",
    "dvdv",
    "2018-01-03 00:00:01",
    "eugene",
    "tutu",
    0,
    "2018-01-03",
    1,
    1,
    "2018-01-03 00:00:01",
    "14 rue de la mairie",
    "http://www.placeholder.com/300x300",
    76000,
    "rouen",
    3,
    3
  );
INSERT INTO
  zones (
    zoneName,
    zoneWifiCode,
    zoneCapacity,
    zoneHasAccessForDisabled
  )
VALUES
  ("salle1", "dfghjkl", 25, 1),
  ("salle2", "dfghjkl", 20, 1),
  ("salle3", "dfghjkl", 30, 1);
INSERT INTO
  equipments (
    equipmentDenimonation,
    equipmentStatus,
    equipementAccess,
    equipmentReference
  )
VALUES
  ("rétroprojecteur", 1, 0, "ref01"),
  ("rétroprojecteur", 1, 1, "ref02"),
  ("rétroprojecteur", 0, 1, "ref03");
INSERT INTO
  furnitures (
    furnitureDenomination,
    furnitureQuantity,
    furnitureStatus,
    furnitureReference,
    zoneId
  )
VALUES
  ("rétroprojecteur", 1, 0, "ref01", 1),
  ("rétroprojecteur", 1, 1, "ref02", 2),
  ("rétroprojecteur", 0, 1, "ref03", 3);
INSERT INTO
  equipementreservations (
    reservationDate,
    reservationDuration,
    reservationLabel,
    reservationStatus,
    equipmentId
  )
VALUES
  (
    "2018-01-03 00:00:01",
    "00:00:01",
    "reservationLabel_1",
    1,
    1
  ),
  (
    "2018-01-04 00:00:01",
    "00:00:02",
    "reservationLabel_2",
    1,
    1
  ),
  (
    "2018-01-05 00:00:01",
    "00:00:03",
    "reservationLabel_3",
    1,
    1
  );
INSERT INTO
  promotions (promotionName, promotionIsActive)
VALUES
  ("2018", 1),
  ("2019", 0),
  ("2020", 0);
INSERT INTO
  groups (groupName, groupType, idPromotion)
VALUES
  ("groupe 1", 1, 1),
  ("groupe 2", 2, 1),
  ("groupe 3", 1, 1);
INSERT INTO
  zonesreservations (
    reservationDate,
    reservationDuration,
    reservationLabel,
    reservationStatus,
    reservationVolume,
    zoneId,
    teacherId
  )
VALUES
  (
    "2018-01-03 00:00:01",
    "00:00:01",
    "reservationLabel 1",
    1,
    20,
    1,
    1
  ),
  (
    "2018-01-04 00:00:01",
    "00:00:05",
    "reservationLabel 2",
    1,
    20,
    1,
    1
  ),
  (
    "2018-02-03 00:00:01",
    "00:00:08",
    "reservationLabel 3",
    1,
    20,
    1,
    1
  );
INSERT INTO
  groupclassroomreservations (groupId, reservationId)
VALUES
  (1, 1),
  (2, 2),
  (3, 3);
INSERT INTO
  roles (roleName)
VALUES
  ("Admin"),
  ("User");
INSERT INTO
  subjects (subjectName)
VALUES
  ("subjectName 1"),
  ("subjectName 2");
INSERT INTO
  teachersubjects (Teachers_teacherId, Subjects_subjectId)
VALUES
  (1, 1),
  (2, 2);
INSERT INTO
  userequipementreservations (userId, reservationId)
VALUES
  (1, 1),
  (1, 2);
INSERT INTO
  usergroups (Users_userId, Groups_groupId)
VALUES
  (1, 1),
  (2, 1);--Manque table tickets--
  --INSERT INTO
  --  tickets (
  --    userId,
  --    ticketSubject,
  --    ticketText,
  --    ticketDate,
  --    ticketCloseDate
  --  )
  --VALUES
  --  (
  --    1,
  --    "ticketSubject 1",
  --    "ticketText 1",
  --    "2018-03-01 00:00:03",
  --    "2018-03-03 00:00:04"
  --  ),
  --  (
  --    2,
  --    "ticketSubject 2",
  --    "ticketText 2",
  --    "2018-04-01 00:00:03",
  --    "2018-04-03 00:00:04"
  --  );
