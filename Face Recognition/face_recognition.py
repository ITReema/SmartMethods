import os
import cv2
import numpy as np
import face_recognition
import face_recognition as fr

def get_faces():
    faces = {}
    for dirpath, name, names in os.walk("./faces"):
        for i in names:
            if i.endswith(".jpg") or i.endswith(".png"):
                face = fr.load_image_file("faces/" + i)
                encoding = fr.face_encodings(face)[0]
                faces[i.split(".")[0]] = encoding
    return faces

def classify_face(im):
    faces = get_faces()
    faces_encoded = list(faces.values())
    known_face_names = list(faces.keys())
    img = cv2.imread(im, 1)
 
    face_locations = face_recognition.face_locations(img)
    unknown_face_encodings = face_recognition.face_encodings(img, face_locations)

    face_names = []
    for face_encoding in unknown_face_encodings:
        matches = face_recognition.compare_faces(faces_encoded, face_encoding)
        name = "Unknown"

        face_distances = face_recognition.face_distance(faces_encoded, face_encoding)
        best_match_index = np.argmin(face_distances)
        if matches[best_match_index]:
            name = known_face_names[best_match_index]

        face_names.append(name)

        for (top, right, bottom, left), name in zip(face_locations, face_names):
            cv2.rectangle(img, (left-15, top-15), (right+15, bottom+15), (0, 255, 0), 2)
            font= cv2.FONT_HERSHEY_SIMPLEX
            cv2.putText(img, name, (left -15, top -15), font,1.0,(0,255,0),2)

    while True:
        cv2.imshow('Face Recognition', img)
        if cv2.waitKey(1) & 0xFF == ord('q'):
            return face_names 

print(classify_face("face.jpg"))
