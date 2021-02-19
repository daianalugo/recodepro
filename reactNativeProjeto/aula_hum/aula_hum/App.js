import { StatusBar } from 'expo-status-bar';
import React from 'react';
import { StyleSheet, Text, View, Image, TextInput, Button, Alert, FlatList} from 'react-native';




export default function App() {
  return (
    <View style={styles.container}>
      

      <Image source={require('./assets/logo.jpg')} style={styles.logo}
      />

      <TextInput style={styles.input} placeholder="Digite seu usuario"/>

      <TextInput style={styles.input} placeholder="Digite sua senha"
        secureTextEntry={true} />

      <Button style={styles.btn} title="Logar" onPress={() => Alert.alert('Alerta de clique!')}
      />

       <Button style={styles.btn} title="Clear" onPress={() => Alert.alert('Alerta de clique!')}
      />

    </View>




  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#FF00FF',
    alignItems: 'center',
    justifyContent: 'center',
  },

  logo:{
    width: 250,
    height: 200,
    borderRadius:40
  },

  input:{
    marginTop: 10,
    padding: 10,
    width: 350,
    backgroundColor:'#DDA0DD',
    fontSize: 15,
    borderRadius: 50    
  },

  btn:{
    backgroundColor:'#DDA0DD',
    borderRadius: 50
  }
});
