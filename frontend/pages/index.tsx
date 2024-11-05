// pages/index.tsx
import React from 'react';
import MainLayout from '../components/layout/layout';
import { Button } from 'antd';

const Home: React.FC = () => {
    return (
        <MainLayout>
            <div style={{ textAlign: 'center' }}>
                <h2>Bem-vindo ao nosso Hotsite!</h2>
                <p>Este é um template inicial utilizando Next.js e Ant Design.</p>
                <Button type="primary" style={{ marginTop: '20px' }}>Saiba Mais</Button>
            </div>
        </MainLayout>
    );
};

export default Home;
